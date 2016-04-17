<?php
														
														/*$directory = "../../upload/assets/uploads";
														$images = glob($directory . "*.jpg");
														
														echo $directory;
														foreach($images as $image)
														{
														    echo $image;
                                                        }*/
                                                        
                                                        $dir = "../../upload/uploads";
                                                        
                                                        if ($opendir = opendir($dir))
                                                        {
                                                            while(($file = readdir($opendir)) !== FALSE)
                                                            {
                                                                if ($file!="."&&$file!="..")
                                                                {
                                                                echo $file;
                                                                }
                                                            }
                                                        }
                                                        
                                                        
                                                        
                                                        

														?>