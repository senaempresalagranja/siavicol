<?php 

$id_encasetamiento=$_POST["id_encasetamiento"];



                    echo "       <label class='form-control-label'>Filtrar por semanas de mortalidad</label> 
                                  <select  class='form-control' name='' id='semanas'>
                                   <option  value='Selecciona'>Selecciona</option>
                                 ";

                            $connection=mysqli_connect("localhost","root","","siavicol");


                            $sql = "SELECT week(Fecha) as semana FROM `mortalidad` WHERE `idEncasetamiento`=$id_encasetamiento GROUP BY semana";
                            $result = mysqli_query($connection,$sql);
                            $semana=17;

                          if ($numero=mysqli_num_rows($result)>0) {
                                 echo "<option value='Todas'>Todas</option>";
                          
                            while ($fila=mysqli_fetch_array($result))
                            { 

                                   $semana=$semana+1;
                                   echo "

<option value='$fila[0]'>$semana</option>";

                            }
                            mysqli_close($connection);

   
                          echo "  </select>";
                   }
 ?>