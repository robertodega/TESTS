<?php

    class EmptyFileException extends Exception{
        
    }

    function getFileContent($filename=''){
        if(!$filename){
            //  throw new EmptyFileException();
            throw new EmptyFileException('No file name specified',-50);
        }
        if(!file_exists($filename)){
            //  die('file "'.$filename.'" does not exist');
            //  return false;
            throw new Exception("$filename does not exist",-20);
        }
        return file_get_contents($filename);
    }

    try{
        getFileContent();
        //  getFileContent('filenameSconosciuto');
    }
    catch(EmptyFileException $e){
        $ret['success'] = false;
        $ret['message'] = $e->getMessage();
        $ret['code'] = $e->getCode();
        echo(json_encode($ret));
    }
    catch(Exception $e){
        echo"<br />Eccezione generica - ".$e->getMessage()."<br />";
    }
    
    finally{                                    //  blocco sempre eseguito, qualunque sia il numero di catch (ammesso che non ci sia qualche die)
        echo"<hr />finally finished!<hr />";
    }