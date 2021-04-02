<?php 

	//FUNCTION THAT RETURN THE DECRYPTED PASSWORD
	
	function decrypt($conn, $password)
	{
	/* DECRYPT A PASSWORD  */
			
		list($password, $enc_iv) = explode("::", $password);
		 
	// THE CIPHER METHOD AND THE KEY ARE THE SAME USED FOR THE ENCRYPTION
		$cipher_method = 'blowfish';
		$enc_key = openssl_digest('Rome', 'SHA256', TRUE);
		
	/* THE COMMAND OPENSS_DECRYPT WILL DECRYPT THE STRING $PASSWORD USING $CIPHER_METHOD, $ENC_KEY AND THE $ENC_IV
	   OBTEINED BEFORE FROM THE ORIGINAL CC. */
	   
		$passwordDecrypt = openssl_decrypt($password, $cipher_method, $enc_key, 0, hex2bin($enc_iv));
		
		return $passwordDecrypt;
	}
?>