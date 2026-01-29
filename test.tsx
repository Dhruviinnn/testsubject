import React, { useEffect, useState } from "react";

type Props = {
  title: any;               // ❌ @typescript-eslint/no-explicit-any
};

const TestComponent = (props: Props) => {
  const [count, setCount] = useState(0);

  const unusedVar = 123;    // ❌ @typescript-eslint/no-unused-vars

  if (count > 0) {
    useEffect(() => {       // ❌ react-hooks/rules-of-hooks
      console.log("Count changed");
    }, []);
  }

  useEffect(() => {
    console.log("Mounted", count);
  }, []);                   // ❌ react-hooks/exhaustive-deps

  console.log(notDefined);  // ❌ no-undef

  return (
    <div>
      <h1>{props.title}</h1>
      <button onClick={() => setCount(count + 1)}>
        Increment
      </button>
    </div>
  );
};

export default TestComponent;