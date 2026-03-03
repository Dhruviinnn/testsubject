<?php
declare(strict_types=1);

// 1️⃣ SYNTAX ERROR (missing semicolon)
$name = "Dhruvin";

// 2️⃣ UNDEFINED VARIABLE
echo $undefinedVar;

// 3️⃣ TYPE ERROR (strict types enabled)
function add(int $a, int $b): int {
    return $a + $b;
}

$result = add("5", 10); // string instead of int

// 4️⃣ RETURN TYPE MISMATCH
function getNumber(): int {
    return "hello"; // wrong return type
}

// 5️⃣ CALLING METHOD ON NULL
$user = null;
echo $user->getName();

// 6️⃣ DIVISION BY ZERO
$x = 10 / 0;

// 7️⃣ ARRAY OFFSET ON NON-ARRAY
$number = 123;
echo $number[0];

// 8️⃣ UNDEFINED ARRAY INDEX
$arr = ["a" => 1];
echo $arr["b"];

// 9️⃣ SQL INJECTION (Security issue)
$id = $_GET["id"];
$conn = new mysqli("localhost", "root", "", "test");
$conn->query("SELECT * FROM users WHERE id = $id");

// 🔟 XSS Vulnerability
echo $_GET["username"];

// 1️⃣1️⃣ UNREACHABLE CODE
function test() {
    return true;
    echo "This will never run";
}

// 1️⃣2️⃣ WRONG FUNCTION ARG COUNT
strlen("hello", "extra");

// 1️⃣3️⃣ USE OF UNINITIALIZED TYPED PROPERTY
class Demo {
    public int $value;
}

$d = new Demo();
echo $d->value;

// 1️⃣4️⃣ REQUIRE NON-EXISTENT FILE
require "missing_file.php";

// 1️⃣5️⃣ LOGICAL ERROR (business logic)
function isAdult(int $age): bool {
    if ($age > 18) {  // maybe requirement was 21?
        return true;
    }
    return false;
}


echo "Done";
