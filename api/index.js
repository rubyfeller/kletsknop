const bodyParser = require('body-parser');
const cors = require('cors');
const express = require('express');
const app = express();

// set up port
const PORT = process.env.PORT || 8080;
app.use(bodyParser.json());
app.use(cors()); // use cors library

// add routes
const router = require('./routes/router.js');
app.use('/api', router);

// run server
app.listen(PORT, () => console.log(`Server running on port: ${PORT}`));
