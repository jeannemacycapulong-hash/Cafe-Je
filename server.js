// Capulong, Jeanne Macy E. [WD-303]
// Midterm Activity - Basic Express Routing Using GET

const express = require('express');
const path = require('path');

const app = express();
const PORT = 3000;

app.use(express.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
    console.log('Rendering index.html');
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.get('/menu', (req, res) => {
    console.log('Rendering menu.html');
    res.sendFile(path.join(__dirname, 'public', 'menu.html'));
});

app.get('/about', (req, res) => {
    console.log('Rendering about.html');
    res.sendFile(path.join(__dirname, 'public', 'about.html'));
});

app.get('/contact', (req, res) => {
    console.log('Rendering contact.html');
    res.sendFile(path.join(__dirname, 'public', 'contact.html'));
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});