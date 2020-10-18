<script>
    var names = 'Harry-John';
    var nameArr = names.split('-');
   // console.log(nameArr[0]);
Array.prototype.diff = function(a) {
    return this.filter(function(i) {return a.indexOf(i) < 0;});
};
var dif1 = [1,2,3,4,5,6].diff( [3,4,5] );  
//console.log(dif1); // => [1, 2, 6]


var a = ['pimcore' ,'abcam'];

var t  = a.slice(-1).pop();

/*alert(t);*/

const occurrencesOf = (number,numbers) => numbers.reduce((counter, currentNumber)=> (number === currentNumber ? counter+1 : counter),0);

var o = occurrencesOf("UPCBARCODE", ["UPCBARCODE", "GTINDetails"]);

//alert('count - ' + o);

 //var a = [["key""pimcore"]];

 var obj = {
    "key": "value1",
    "value": "value2"
};

var a = [obj]

 console.log(a);

</script>    

<?php
$stringCamelCase = 'stringCamelCase';// hiThere$string = "hiTherePimcore";
$array      = preg_split('#([A-Z][^A-Z]*)#', $stringCamelCase, null, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

echo '<pre/>';

$arr = array("0" => array('key' => 'pim', "value" => 'abcam'));

print_r($arr);

echo json_encode($arr);
die;

echo strtotime('today');




die;
$str = 2;
echo $date = strtotime("+$str day");

die;
$arr = array('fileName' => 'pimcore download', 'productIds' => array('1','2','3'), 'assetType' => array('imageType' => array('12','13'), 'documentType' => array('18','19')));


echo '<pre/>';
print_r($arr);
echo json_encode($arr);

die;

function getSaveCopyName($fileName, $gtin) {
        $pathinfo = pathinfo($fileName);
        $extension = $pathinfo['extension'];
        $fileName = $pathinfo['filename'];
        $data = explode('_', $fileName);
       
        $data[0] = $gtin;
        $data[count($data) - 1] = time();

        return implode('_', $data). '.' .$extension;
    }

echo getSaveCopyName('2323_Data_Asset_1600408120.pdf', '4556');


die;
phpinfo();
die;
?>


<a href="info.php?file=path/https://nbb.blob.core.windows.net/test-hirak/assets/Content_distribution_UK.png">Download</a>
<?php echo 'Pimcore'; die; ?>
<iframe src="https://turbo.net/embed/run/filezilla/filezilla?no-ga=" width="500" height="350" frameborder="0"></iframe>

<?php

$myfile = file_get_contents("/var/www/html/ptcf/testing.txt", "r") or die("Unable to open file!");
   
echo '<pre/>';
print_r($myfile);


$layout = array(
              '0' => array('name' => 'Warnings', 'datatype' => 'data')
        );   

$layout = array(
              '0' => array(
                            'name' => 'Warnings', 
                            'datatype' => 'layout', 
                            'childs' => array(
                                             '0' => array(
                                                         'name' => 'Artwork Specification', 
                                                         'datatype' => 'data'
                                                         ),
                                              '1' => array(
                                                         'name' => 'Box Contents', 
                                                         'datatype' => 'data'
                                                         ) 
                                        )
                          )
          );           
 
//print_r($layout); 
function test($layout){


  //print_r($layout);

  //$layout = array('0' => array('XZXZ'));

   echo count($layout).'<br/>';
   $i = 0; 
   foreach ($layout as $layoutkey => $layoutval) {

          if(!empty($layoutval['childs'])){
              test($layoutval['childs']);

              //$layout[$layoutkey]['childs'][$layoutkey]['classificationstoreData'] = 'PIMCORE';

              //echo $layoutkey;
              
          }else{
            
          }

          $layout[$layoutkey]['childs'][$layoutkey]['classificationstoreData'] = 'PIMCORE';
          
          $layout[$layoutkey]['classificationstoreData'] = 'PIMCORE';

          echo 'PIMCORE-'.$i.'<br/>';
          $i++;
   }

   return $layout;
}

$result = test($layout);


print_r($result);
die;

function enum($n) {
    if($n == 0)
        return array('');
    $result = array();
    foreach(enum($n - 1) as $e)
        foreach(range(0, 9) as $k)
            $result []= $e . $k;
    return $result;
}

print_r(enum(3));

/*if(empty($name)){
  echo 'name can not be blank';
}

if(empty($rollno)){
  echo 'rollno can not be blank';
}*/

die;
/*echo '<pre/>';
$conn = new mysqli('pimcoredb.cdabq436imtw.us-east-1.rds.amazonaws.com', 'admin', 'admin1234', 'pimcoredb', 3306);
print_r($conn);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//print_r($link);
//die;
$sql = "SELECT * from student";
$result = $conn->query($sql);
//$rds = $result->fetch_assoc($result);

while($row = $result->fetch_assoc()) {
    echo $row["name"].'<br/>';
  }



  $sql = "INSERT INTO student (id , name)
VALUES ('45', 'Pimcore TEST')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//PHP 7.2.24*/


/*$customLayout = array(
                     '0' => array('fieldtype' => 'input', 'name' => 'artno', 'title' => 'Article Number'),
                     '1' => array('fieldtype' => 'input', 'name' => 'ean', 'title' => 'EAN-Code'),
                     '2' => array('fieldtype' => 'input', 'name' => 'size', 'title' => 'Size')
                );


echo '<pre/>';

print_r($customLayout);*/


//$str = "8560841836";
/*$mystr = array($str);
$string = strlen($str);
$string = '';
for($i = 0; $i <= $string; $i++){   
  if($str[$i] == 'C'){

  }
  $string .= $str[$i];  
}
*/

$string = "amazonLocalizedCompleteness";
echo $completenessKey = lcfirst(str_replace("Completeness", "", $string));
echo 'test-deepak';
