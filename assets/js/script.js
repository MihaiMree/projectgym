const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach((item) => {
    const question = item.querySelector('.question');
    const answer = item.querySelector('.answer');

    question.addEventListener('click', () => {
        if (answer.style.display === 'none') {
            answer.style.display = 'block';
        } else {
            answer.style.display = 'none';
        }
    });
});


$(document).ready(function(){
    $('#exercise').on('change', function(){
        let tableName = $(this).val();
        let username = $('#username').val();
        if(tableName && username){
            $.ajax({
                type:'POST',
                url:'assets/config/workConfig.php',
                data:{
                    'table_name':tableName,
                    'username': username
                },
                success:function(html){
                    $('#result').html(html);
                }
            });
        }
    });
});