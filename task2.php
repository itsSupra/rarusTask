<body bgcolor="#8a2be2">
<form method="post">
    <table>
        <tr>
            <td>
                <textarea name="comment" placeholder="Print ur comment" cols="35" rows="7"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="name" placeholder="Print ur name" required>
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="address" placeholder="Print ur address">
            </td>
        </tr>

        <tr>
            <td>
                <input type="tel" name="phone" placeholder="Print ur phone" required>
            </td>
        </tr>

        <tr>
            <td>
                <input type="file" name="file">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
</form>
</body>

<?php

if (isset($post['submit'])) {
    if ($post['name'] == null || $post['phone'] == null) echo 'Print name and phone';
    $email = $post['email'];
    $index = strpos($email, '@');
    $email = substr(@$email, $index + 1);
    if ($email == 'gmail.com') echo 'Error email!';
    else echo 'Successfully sent';
}