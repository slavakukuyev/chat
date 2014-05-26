<!DOCTYPE html>
<html>
    <head><title>chat</title></head>
    
    <body>
        
        <iframe id="chatWindow" name="chatWindow" width="280" height="300" src="message_chat.php"></iframe>
        <form action="message_chat.php" method='post' target="chatWindow">
            <input name="sender" type='text' placeholder="Your name..." required/><br>
            <textarea name="message" placeholder="Type your message..." required rows="4" cols="20"></textarea><br>
            <input type="submit" name="ok" value="send"/>
        </form>
        
        
    </body>
    
</html>