<?php
function assert_true($condition, $message) {
  if (!$condition) {
    fwrite(STDERR, "TEST FAIL: $message\n");
    exit(1);
  }
}

ob_start();
include __DIR__ . "/index.php";
$output = ob_get_clean();

$data = json_decode($output, true);

assert_true(is_array($data), "Response không phải JSON");
assert_true(($data["message"] ?? "") === "Hello DevOps", "message sai");
assert_true(isset($data["version"]), "thiếu version");

echo "ALL TESTS PASSED\n";
exit(0);
