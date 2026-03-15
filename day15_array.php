<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <script>
            array1=[35,"nithi","poo"];
            console.log(array1);
            array1.push("40","45","25");
            console.log(array1);
            array1.pop();
            console.log(array1);
            array1.shift();
            console.log(array1);
            array1.unshift(35,"nithi");
            console.log(array1);
            array1.splice(3,1,"40");
            console.log(array1);
            array1.splice(2,0,"nithi");
            console.log(array1);
            array1.splice(2,2,"poo");
            console.log(array1);
        let array2=array1.slice(1,2);
            console.log(array2);
        array3=[1,21,35,87,56,97]
            console.log(array3.sort());
            console.log(array3.reverse());
        array4=["cat","dog","Apple","goat"]
            console.log(array4.sort());
        array5=["Ant","elephant","Cow"]
            console.log(array5.reverse());
            console.log(array4.fill("Hai",3,5));
            console.log(array5.fill("Alpha",0,1));
            console.log(array4.join("+"));
            console.log(array5.toString());
        let array6=array5.concat(array4,array3);
            console.log(array6);
            console.log(array6.indexOf("Alpha"));  
            console.log(array6.includes("ball"));
            console.log(array4.includes("dog"));

        var total=0;
            array3.forEach(funcall);
        function funcall(value){
            total+=value;
            }
            console.log(total);
        let tot=array3.map(fncall)
        function fncall(value){
                return value +10;
                }
            for(let j of tot)
                {
                    console.log(j)
                }
        let tota=array3.filter(fcall)
        function fcall(value){
                return value>30;
                }
            for(let j of tota)
            {
                console.log(j);
            }
        let Tot=array3.reduce(f1call)
        function f1call(sum,value){
            return sum+=value;
            }
            console.log(Tot);
        let array_key=array3.keys()
        console.log(array_key);
            for(let j of array_key)
            {
            console.log(j);
            }
        let t=array3.some(f2call)
        function f2call(value)
        {
        return value>40;
        }
        console.log(t);
                
     
    </script>
</head>
<body>
    <p>Array Methods</p>
</body>
</html>