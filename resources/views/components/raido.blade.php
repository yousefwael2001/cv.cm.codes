<div class="rating">
    <input type="radio" id="5" name="rate" value="5" class="hidden">
    <label for="star5" title="text"></label>
    <input type="radio" id="4" name="rate" value="4" class="hidden">
    <label for="star4" title="text"></label>
    <input type="radio" id="3" name="rate" value="3" class="hidden">
    <label for="star3" title="text"></label>
    <input type="radio" id="2" name="rate" value="2" class="hidden">
    <label for="star2" title="text"></label>
    <input type="radio" id="1" name="rate" value="1" class="hidden">
    <label for="star1" title="text"></label>
  </div>
  <style>
    .rating:not(:checked) > input {
  position: absolute;
  appearance: none;
}

.rating:not(:checked) > label {
  float: right;
  cursor: pointer;
  font-size: 20px;
  color: #666;
}

.rating:not(:checked) > label:before {
  content: '★';
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
  color: #e58e09;
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
  color: #ff9e0b;
}

.rating > input:checked ~ label {
  color: #ffa723;
}




  </style>