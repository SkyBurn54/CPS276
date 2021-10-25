<?php

Class Directories{
    
    public function addDirectory($post){
    
        if(isset($post['submit'])){
        
        $directoryName = $post['directoryname'];
        
            if(!is_dir('directories/' . $directoryName)){
            
                if(mkdir('directories/' . $directoryName, 0777, true)){

                    chmod('directories/' . $directoryName, 0777);
                
                    $path = 'directories/' . $directoryName . "/";
                
                    $file = fopen($path . "readme.txt","w");
                
                    if(!fwrite($file, $post['filecontent'])){
                        fclose($file);
                        $acknowledgement = "<p>File could not be created</p>";
                    }
                    else {  //if(!fwrite($file, $post['filecontent']))
                        $acknowledgement = "<p>File and directory were created</p>";
                        $filePath = "<p><a href='directories/{$directoryName}/readme.txt'>Path were file is located</a></p>";
                        return $acknowledgement.$filePath;
                    }
                }
                else {  //if(mkdir('directories/' . $directoryName))
                    $acknowledgement = "<p>Error: Directory could not be made.</p>";
                    return $acknowledgement;
                }
            
            }
            else {  //if(!is_dir('directories/' . $directoryName))
                    $acknowledgement = "<p>A directory already exists with that name.</p>";
                    return $acknowledgement;
            }

        }
    }
}
  
?>
