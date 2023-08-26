<x-navbar/>
    @livewire('form')
    
    <style>
        .radio-btn > i {
          color: #F6F4EB;
          background-color: #749BC2;
          font-size: 22px;
          position: absolute;
          top: -15px;
          left: 50%;
          transform: translateX(-50%) scale(4);
          border-radius: 50px;
          padding: 3px;
          transition: 0.2s;
          pointer-events: none;
          opacity: 0;
        }
  
  
        .custom-radio input:checked + .radio-btn {
          border: 3px solid #749BC2;
        }
  
        .custom-radio input:checked + .radio-btn > i {
          opacity: 1;
          transform: translateX(-50%) scale(1);
        }
      </style>

<x-footer/>