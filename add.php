<?php
				$conn = mysqli_connect("localhost","root","","food");
				$query = "select * from items;";
                $result = mysqli_query($conn,$query);
				while ($show = mysqli_fetch_array($result)){
                    if($show["restaurant"]=="Earth Plate")
                        $rest="Flo";
                    else if($show["restaurant"]=="Hundred Heritage")
                        $rest="Chandni Chowk";
                    else if($show["restaurant"]=="Vellore Kitchen")
                        $rest="Salim Punjabi Dhaba";
                    else if($show["restaurant"]=="Valley Junction")
                        $rest="Lava Cakes";
                    $sql = "insert into items values(null,'{$show["item"]}',{$show["price"]},'$rest');";
                    mysqli_query($conn,$sql);
                }
            echo "Good done.";
?>