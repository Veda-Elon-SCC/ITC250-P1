<?php
$myPerson = new Person('Elon','Veda',1000000);
//echo $myPerson->Pay;
echo '<pre>';
var_dump($myPerson);
echo '</pre>';
class Person {
    public $LastName = '';
    public $FirstName = '';
    public $Pay = 0;
    public function Person($LastName, $FirstName, $Pay){
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Pay = $Pay;
    }//end constructor
}//end person class
?>
<?php
//postback1.php
if(isset($_POST['submit'])){
    //echo $_POST['FirstName'];
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}else{
    echo '
    <form action="" method="post">
    <p> <label>
        First Name:<br />
        <input type="text" name="FirstName" />
        </label>
    </p>
    <p>
        <input type="radio" name="FavoriteColor" value="red" /> Red<br />
        <input type="radio" name="FavoriteColor" value="green" /> Green<br />
        <input type="radio" name="FavoriteColor" value="blue" /> Blue<br />
    </p>
    <p>
        <input type="checkbox" name="IceCreamToppings[]" value="chocolate" /> Chocholate<br />
        <input type="checkbox" name="IceCreamToppings[]" value="caramel" /> Caramel<br />
        <input type="checkbox" name="IceCreamToppings[]" value="butterscotch" /> Butterscotch<br />
    </p>
    <p>
        <label>
            <select name="State">
                <option value="">Please Select a State</option>
                <option value="WA">Washington</option>
                <option value="OR">Oregon</option>
                <option value="CA">California</option>
            </select>
        </label>
    </p>
    <p>
        <input type="submit" name="submit" value="submit" />
    </p>
    </form>
    ';
}
?>
