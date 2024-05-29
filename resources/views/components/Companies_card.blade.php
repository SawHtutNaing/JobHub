


<style>

.flip-card {
  background-color: transparent;

  perspective: 1000px;
  font-family: sans-serif;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;

  border-radius: 1rem;
}

.flip-card-front {
  
}


.flip-card-back {
  background: linear-gradient(120deg, rgb(75, 0, 130) 30%, indigo 88%, rgb(138, 43, 226) 40%, rgb(123, 104, 238) 78%);
  color: white;
  transform: rotateY(180deg);
}

</style>
<div class="flip-card  w-64  h-64">
  <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="{{asset('storage/images/companies_card/one.jpg')}}"  class="h-full w-full " alt="">
      </div>
      <div class="flip-card-back">
         <h1>
          Suntory Global Spirits
         </h1>
         <p>
          Consumer Goods & Services , Food & Beverage
         </p>
      </div>
  </div>
</div>


