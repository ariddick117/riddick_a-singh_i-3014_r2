<?php
function createUser($fname, $username, $password, $email){
    $pdo = Database::getInstance()->getConnection();

    //TODO: build the proper SQL query with the information above
    // execute it to create a user in tbl_user
    $create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email)'.  
    $create_user_query = ' VALUES(:fname, :username, :password, :email)';
    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_result = $create_user_set->execute(
        array(
            ':fname'=>$fname,
            ':username'=>$username,
            ':password'=>$password,
            ':email'=>$email
        )
    );
    //TODO: based on the execution result, if everything goes through
    //redirect to the index.php
    //Otherwise, return an error message
    
    if($create_user_result){
        redirect_to('index.php');
    }else{
        return 'You are bad and you should feel bad';
    };
}
?>