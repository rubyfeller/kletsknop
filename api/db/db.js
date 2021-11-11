var mysql = require("mysql");
// debugging on, should be removed once it works
var connection = mysql.createConnection({debug: true,
  // host: "192.168.48.42",
  // user: "pma",
  // database: "kletsknop",
  // password: "Qwe123",
  // timezone: "Europe/Amsterdam"
  host: "localhost",
  user: "root",
  database: "kletsknop",
  password: "",
  timezone: "Europe/Amsterdam"
});

connection.connect(function(err) {
  if (err) {
    console.error("error connecting: " + err.stack);
    return;
  }

  console.log("connected as id " + connection.threadId);
});
module.exports = connection;
