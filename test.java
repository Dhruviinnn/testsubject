package com.example;

import org.checkerframework.checker.nullness.qual.NonNull;

public class DemoErrors {

    // --------------------------------------------------
    // 1️⃣ javac error (compile-time)
    // Type mismatch
    // --------------------------------------------------
    public void javacError() {
        int x = "not a number"; // ❌ javac: incompatible types
    }

    // --------------------------------------------------
    // 2️⃣ Checker Framework error (nullness)
    // --------------------------------------------------
    public void checkerFrameworkError(@NonNull String name) {
        name = null; // ❌ Checker: assigning null to @NonNull
    }

    // --------------------------------------------------
    // 3️⃣ SpotBugs / NullAway error (possible NPE)
    // --------------------------------------------------
    public void spotBugsError() {
        String s = null;
        System.out.println(s.length()); // ❌ NP_NULL_ON_SOME_PATH
    }

    // --------------------------------------------------
    // 4️⃣ PMD error (empty catch block)
    // --------------------------------------------------
    public void pmdError() {
        try {
            int x = 10 / 0;
        } catch (Exception e) {
            // ❌ PMD: EmptyCatchBlock
        }
    }

    // --------------------------------------------------
    // 5️⃣ Test-related logic error (bad design)
    // (won't fail compile, but should fail tests)
    // --------------------------------------------------
    public int divide(int a, int b) {
        return a / 0; // ❌ Test should catch ArithmeticException
    }
}
