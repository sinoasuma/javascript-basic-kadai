const bTn=document.getElementById('btn');
const teXt=document.getElementById('text');

bTn.addEventListener('click',()=>{
  const childList=document.createElement('li');
  childList.textContent='ボタンをクリックしました';
  teXt.appendChild(childList);
  teXt.textContent='ボタンをクリックしました。';
});