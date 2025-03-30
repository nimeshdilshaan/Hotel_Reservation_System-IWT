document.querySelectorAll('.faq-item').forEach(item =>
{
    item.addEventListener('click', () =>
     {

      let answer = item.querySelector('.faq-answer');
      answer.style.display = answer.style.display === 'none' ? 'block' : 'none';


      });

});
