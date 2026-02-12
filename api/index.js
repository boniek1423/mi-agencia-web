require('dotenv').config();
const express = require('express');
const mongoose = require('mongoose');
const path = require('path'); // Importante para las rutas de archivos
const app = express();

// 1. Conexión a Base de Datos
mongoose.connect(process.env.MONGODB_URI)
  .then(() => console.log("🔥 Conectado a MongoDB Atlas"))
  .catch(err => console.error("❌ Error de conexión:", err));

// 2. Definición del Modelo (Lead de Cliente)
const Proyecto = mongoose.model('Proyecto', new mongoose.Schema({
    cliente: String,
    email: String,
    tipoWeb: String,
    mensaje: String,
    fecha: { type: Date, default: Date.now }
}));

// 3. Middlewares
app.use(express.json());
app.use(express.static(path.join(__dirname, 'public'))); 

// 4. Rutas de la API
app.post('/api/cotizar', async (req, res) => {
    try {
        const nuevoProyecto = new Proyecto(req.body);
        await nuevoProyecto.save();
        res.status(201).json({ mensaje: "¡Propuesta recibida! Te contactaremos pronto. 🚀" });
    } catch (error) {
        res.status(400).json({ error: "No pudimos guardar tu solicitud." });
    }
});

// 5. Ruta Principal (Sirve tu index.html)
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// 6. Exportar para Vercel
const PORT = process.env.PORT || 3000;
if (process.env.NODE_ENV !== 'production') {
    app.listen(PORT, () => console.log(`Servidor en http://localhost:${PORT}`));
}

module.exports = app;