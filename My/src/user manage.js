
const express = require('express');
const mysql = require('mysql');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

n
const db = mysql.createConnection({
    host: 'localhost:4306',
    user: 'root',  
    password: '',  
    database: 'Hotel_reservation_system'
});

db.connect((err) => {
    if (err) {
        throw err;
    }
    console.log('Connected to MySQL Database');
});


app.get('/getUserData', (req, res) => {
    let sql = 'SELECT * FROM users';  d
    db.query(sql, (err, result) => {
        if (err) throw err;
        res.send(result);
    });
});

const PORT = 5000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
