<?
    session_start();
    if($_SESSION['isAdmin'] != 1)
    {
        header('location:../index.php');
    }
    else
    {

        function print_Users($array)
        {
            //If session array isn't set
            if(!isset($_SESSION['allUsers']))
            {
                //Get outta dodge
                echo "No users to print!";
                return;
            }
            else
            {
                $headers = array_keys($array[0]);
                $output = "<table class='table table-hover'><thead class='thead-dark'><tr class='row text-center'>";
                //foreach header output
                foreach($headers as $key => $value)
                {
                    //Format header row column width
                    if($value == 'User ID')
                    {
                        $output .= "<th class='col-2 text-left'>" . $value . "</th>";
                    }
                    else if($value == 'Email')
                    {
                        $output .= "<th class='col-4 text-left'>" . $value . "</th>";
                    }
                    else
                    {
                        $output .= "<th class='col-3 text-left'>" . $value . "</th>";
                    }
                }

                    //End table header and start table body
                    $output .= "</tr></thead><tbody>";
                
                //Concat output variable with end of header markup
                $output .= "</tr></thead><tbody>";
                for($i=0; $i < $array[$i]; $i++)
                {
                    $output .= "<tr class='row text center'>";
                
                    foreach($array[$i] as $key=>$value)
                    {
                        if($key == 'User ID')
                        {
                            //OUTPUT TD AS A LINK. THIS IS WHAT WE'LL USE TO INSPECT EACH USER'S UPLOADED PHOTOS
                            //SIMILAR TO HOW COMMENTING PAGES WORKED
                            $output .= "<td class='col-2 text-left'><a href='photo_censor.php?id=" . $value . "'><div>" . $value . "</div></a></td></a>";
                        }
                        else if($key == 'Email')
                        {
                            $output .= "<td class='col-4 text-left'>" . $value . "</td>";
                        }
                        else
                        {
                            $output .= "<th class='col-3 text-left'>" . $value . "</td>";
                        }
                    }
                //End user information row
                $output .= "</tr>";
                }
            //End table
            $output .= "</tbody></table>";
            }
            return $output;
        }
    }
?>