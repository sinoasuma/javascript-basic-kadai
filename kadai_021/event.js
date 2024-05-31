const bTn=document.getElementById('btn');

bTn.addEventListener('click',()=>{
  setTimeout(()=>{
    const teXt=document.getElementById('text');
    teXt.textContent='ボタンをクリックしました';
  },2000);
});