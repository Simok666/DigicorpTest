<?php
    class generateToken {
        private $tokens = [];
        public function generateToken($user) {
            if (!isset($this->token[$user])) {
                $this->tokens[$user] = [];
            }
            
            $token = bin2hex(random_bytes(16)); 
            array_push($this->tokens[$user], $token);

            if(count($this->tokens[$user]) > 10) {
                array_shift($this->tokens[$user]);
            }

            return $token;
        }

        public function verifyToken($user, $token){
            if(isset($this->tokens[$user])) {
                $getIndex = array_search($token, $this->tokens[$user]);
                if($getIndex !== false) {
                    unset($this->tokens[$user][$getIndex]);
                    return true;
                } 
            }  

            return false;
        }
    }

    $obj = new generateToken();
    
    for ($i=0; $i < 10; $i++) { 
        $token1 = $obj->generateToken('jhon');
        echo $token1. "\n";
    }

    for ($i=0; $i < 10; $i++) { 
        $token2 = $obj->generateToken('doe');
        echo $token1. "\n";
    }

    $result = $obj->verifyToken('jhon', $token1); 



?>