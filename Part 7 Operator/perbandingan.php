<?php
echo "1. 12 < 14 = "; var_dump(12<14); // bool(true) 
echo "\n";
 
echo "2. 14 < 14 = "; var_dump(14<14); // bool(false)
echo "\n";
 
echo "3. 14 <= 14 = "; var_dump(14<=14); // bool(true) 
echo "\n";
 
echo "4. 10 <> '10' = "; var_dump(10<>'10'); // bool(false) 
echo "\n";
 
echo "5. 10 == '10' = "; var_dump(10=='10'); // bool(true) 
echo "\n";
 
echo "6. 10 === '10' = "; var_dump(10==='10'); // bool(false) 
echo "\n";
 
echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2'); // bool(true) 
echo "\n";
 
echo "8. 'dunia'";