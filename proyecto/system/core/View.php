<?php
class View {
    private $template;
    private $controller_name;
    private $params;

    public function __construct($controller_name,$params = array())
    {
        $this->controller_name = $controller_name;
        $this->params = $params;

        #try{
            $this->render();
        #}catch(Exception $e){
        #    error_log($e->getMessage());
        #    exit('error in page loading');
        #}
    }
public function render()
{
    if(class_exists($this->controller_name)){
        $file_name = str_replace('Controller', '', $this->controller_name);
        $this->template = $this->getContentTemplate($file_name);
        echo $this->template;
    }else{
        throw new Exception("Error {$this->controller_name} does not exist");
    }
}
public function getContentTemplate($file_name){
    $file_path = ROOT . PATH_VIEWS . "{$file_name}/{$file_name}View.php";
    if(is_file($file_path)){
        $params = $this->params;
        ob_start();
        require($file_path);
        $template = ob_get_contents();
        ob_end_clean();
        return $template;
    }else{
        throw new Exception("Error {$file_path} does not exist");
    }
} 
}