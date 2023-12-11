import { useEffect } from "react";

function App() {

  useEffect (()=>{  
    async function getData(){
      const response = await fetch("http://localhost/");
      const data = await response.json();
      console.log(data);
    }
    getData();
  }, []);
  
  return (
<>
<h1>Hello from frontend!</h1>
<h1>Jā,es esmu!</h1>
</>
    
  );
}

export default App;
