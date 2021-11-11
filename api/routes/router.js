//libraries
var express = require("express");
const axios = require("axios");
var router = express.Router();
const db = require("../db/db.js"); // includes connection to the database

// global variables
router.post("/register", (req, res, next) => {
  // if /register is requested..
  let message = req.body.message;
  console.log("Received request...");
  db.query(
    `INSERT INTO buttonclicks (clickId, clickTime, clickMessage) VALUES(NULL, CURRENT_TIMESTAMP, '${message}')`,
    (err, result) => {
      // if there is an error, set value msg to error message
      if (err) {
        return res.status(400).send({
          msg: err,
        });
      }
      return res.status(201).send({
        // on success..
        // user-feedback
        msg: result,
      });
    }
  );
}),
  router.get("/clicks", (req, res, next) => {
    // if /register is requested..
    db.query(
      `SELECT * FROM buttonclicks WHERE clickTime BETWEEN NOW() - INTERVAL 15 MINUTE AND NOW() ORDER BY clickId DESC`,
      (err, result) => {
        // if there is an error, set value msg to error message
        if (err) {
          return res.status(400).send({
            msg: err,
          });
        }
        return res.status(201).send({
          // on success..
          // user-feedback
          msg: result[0], // get latest button press
        }
        );
      }
    );
  });
module.exports = router;
