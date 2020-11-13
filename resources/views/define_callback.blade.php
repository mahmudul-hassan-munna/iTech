<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


</body>
<script type="text/javascript">
    var data = {email: 'trump@gmail.com', age: 70}; // input json.

    function checkAge(data, callback) {

        if (data.age < 18) {
            console.log('Email is not valid');
            alert('Email is not valid');
            return false;
        }

        callback(data);
    }

    checkAge(data, function (email) {
        console.log('Email is valid');
        alert('Email is valid');
    });
</script>

</html>
