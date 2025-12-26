<?php
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
  "message" => "Hello DevOps",
  "version" => "1.0",
  "language" => "PHP"
], JSON_UNESCAPED_UNICODE);
