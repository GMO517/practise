window.addEventListener('load', function () {
  const p1 = document.getElementById('title')
  console.log(p1)
  p1.innerText = "訂閱布魯斯前端"
  const b1 = this.document.getElementById('btn')
  b1.addEventListener('click', function () {
    console.log('點下去')
  })

  const box1 = document.getElementById('box')
  box1.innerHTML = '<p>Test</p>'


  
})