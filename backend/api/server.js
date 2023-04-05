console.log("hello worlds");
const express = require("express");
const cors = require("cors");
const helmet = require("helmet");

const server = express();
server.use(helmet());
server.use(cors());
server.use(express.json());

server.get("/", (req, res) => {
  res.status(200).json({ res: "what is life" });
});

module.exports = server;
