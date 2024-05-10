<section class="main-section alabaster" id="users">
	<div class="container fullsize">
    <h2>users</h2>
               <table class = center>
                   <tr>
                       
                        <td class="tableheader"><strong>Name</strong></td>
                        <td class="tableheader"><strong>Email</strong></td>

                        
                   </tr>

                    <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>aflred@dummy.com</td>
                    </tr>
                    <tr>
                    <td>Rishabh Jain</td>
                    <td>rishabh@dummy.com</td>
                    </tr>
                    <tr>
                    <td>Geno Zepda</td>
                    <td>Geno@dummy.com</td>
                    </tr>
                   <?php require "includes/dbconnect.php"?>

                    <?php
                        if(isset($_POST["search"])){
                            $sql = "SELECT * FROM users WHERE";
                            if(isset($_POST["name"]) and $_POST["name"]!=""){
                                $sql=$sql." firstname LIKE '%".$_POST["name"]."%' OR lastname LIKE '%".$_POST["name"]."%'";
                            }
                            else{
                                $sql=$sql." firstname = '' OR lastname= ''";
                            }
                            if(isset($_POST["email"]) and $_POST["email"] != "" ){
                                $sql=$sql."OR email LIKE '%".$_POST["email"]."%'";
                            }
                            if(isset($_POST["phone"]) and $_POST["phone"] != ""){
                                $sql=$sql."OR homephone LIKE'%".$_POST["phone"]."%' OR cellphone LIKE '%".$_POST["phone"]."%';";
                            }
                            
                            $result = $conn->query($sql);
                            }
                   
                        else{
                            $sql = "SELECT * FROM users";
                            $result = $conn->query($sql);
                        }
                        echo 'hi test'+ $result;

                   
                        
                        while($row = $result -> fetch_assoc()){
                            echo "<tr>";
                                echo "<td>";
                                    echo $row["firstname"];
                                echo "</td>";
                                echo "<td>";
                                    echo $row["lastname"];
                                echo "</td>";
                                echo "<td>";
                                    echo $row["email"];
                                echo "</td>";
                                echo "<td>";
                                    echo $row["homeaddress"];
                                echo "</td>";
                                echo "<td>";
                                    echo $row["homephone"];
                                echo "</td>";
                                echo "<td>";
                                    echo $row["cellphone"];
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo 'hi test'+ $result;
                    ?>
               </table>
        <br/>
        <br/>
           </div>
</section>