// implode 
& explode (split)
array_slice()
substr()

echo substr($str, 0, 5);  // Outputs: Hello
echo substr($str, 0, -7); // Outputs: Hello
echo substr($str, 0);     // Outputs: Hello World!
echo substr($str, -6, 5); // Outputs: World
echo substr($str, -6);    // Outputs: World!
echo substr($str, -12);  