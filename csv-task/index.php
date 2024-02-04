<?php
require_once 'database.php';

function constructDescription($description)
{
    $description = str_pad($description,50,"_",STR_PAD_LEFT);
    return $description;
}


$row = 0;
$basicSkill;
$specializedSkill;

//Grab Data from csv file and store into a associative arry 
if (($handle = fopen("skills.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;

        if($row==1) continue;

        $type = (int)$data[0];
        $title = (string)$data[1];
        $description = (string)$data[2];


        if($type%2==0)
        {
            if(isset($basicSkill[$title])==false)//here check is there any title before assigned.
            {
                $finalDescription = constructDescription($description);
                $basicSkill[$title] = $finalDescription;

            }
        }
        else
        {
            if(isset($specializedSkill[$title])==false) //here check is there any title before assigned.
            {
                $finalDescription = constructDescription($description);
                $specializedSkill[$title] = $finalDescription;
            }
        }

    }
    fclose($handle);
}


//Basic skill insertion in database.
$basicSkillDataCount = 0;
$basicSkillFailedDataCount = 0;

$count = 0;

foreach ($basicSkill as $title => $description){

    $count++;

    if ($count == 100)
    {

        var_dump($basicSkill[$title]);
    }


    $sql = "INSERT INTO basic_skills (title, description)
    VALUES ('$title', '$description')";


    if($conn->query($sql)==true) {
        $basicSkillDataCount++;
    }
    else
    {
        $basicSkillFailedDataCount++;
    }
}


//Specialized skill insertion in database.
$specializedSkillDataCount = 0;
$specializedSkillFailedDataCount = 0;

foreach ($specializedSkill as $title => $description){  

    $sql = "INSERT INTO specialized_skills (title, description)
    VALUES ('$title', '$description')";

    if($conn->query($sql)===true)
    {
        $specializedSkillDataCount++;
    }
    else
    {
        $specializedSkillFailedDataCount++;
    }

}

///Result
echo "Basic Skills data". "<br />\n";
echo $basicSkillDataCount . " Successfully data inserted". "<br />\n";
echo $basicSkillFailedDataCount . " Failed to data insertion". "<br />\n";

echo "<br />\n";

echo "Specialized Skills data" . "<br/>\n";
echo $specializedSkillDataCount . " Successfully data inserted". "<br />\n";
echo $specializedSkillFailedDataCount . " Failed to data insertion". "<br />\n";



