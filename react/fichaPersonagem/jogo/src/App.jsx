import { useState } from 'react'
import './App.css'

function App() {
  const [vida, setVida] = useState(10)
  const [ataque, setAtaque] = useState(1)
  const [defesa, setDefesa] = useState(3)
  const [inteligencia, setInteligencia] = useState(1)

//FUNÇÕES PARA ALTERR ATRIBUTOS DO PERSONAGEM aumentarPontos
const aumentar=  (atributo , valor) => () => atributo(valor + 1);
const diminuir = (atributo , valor) => () => atributo(valor - 1);
const resetar = (atributo, valor)  => () => atributo(valor)
  
return (
    <>
      
      <h1>ficha Personagem</h1>
      <div className="card">
        <h2>Nome: Satoshi</h2>
        <p> classe : Ladrão</p>
        <p> Nivel: 1</p>
        
        </div>
        
        <div id='statusPersonagem' className='card'>
        <div className= 'cadaStatus'> 
        {/*VIDA*/}
        <div>
        <button className="diminuirBtn" onClick={diminuir(setVida, vida )}>-1</button>
        <h4>VIDA : {vida}</h4>
        <button onClick={aumentarBtn(setVida, vida )}>+1</button>
        </div>
        <button onClick={resetar (setVida, 1 )}>resetar</button>
        </div>
        <div>
       </div>
        
        
        <div className= 'cadaStatus'> 
        {/*ATAQUE*/}
        <div>
        <button className="diminuirBtn"  onClick={diminuirBtn(setAtaque, ataque )}>-1</button>
        <h4>ATAQUE : {ataque}</h4>
        <button onClick={aumentarBtn (setAtaque, ataque )}>+1</button>
        </div>
        <button onClick={resetar (setAtaque, 1 )}>resetar</button>
        </div>
        
        
        
        <div className= 'cadaStatus'> 
        {/*DEFESA*/}
        <div>
        <button onClick={diminuirBtn(setDefesa, defesa )}>-1</button>
        <h4>DEFESA : {defesa}</h4>
        <button onClick={aumentarBtn(setDefesa, defesa)}>+1</button>
        </div>
        <button onClick={resetar(setDefesa, 1 )}>resetar</button>
        </div>
        

        
          <div className= 'cadaStatus'> 
        {/*INTELIGENCIA*/}
        <div>
        <button onClick={diminuirBtn(setInteligencia, inteligencia )}>-1</button>
        <h4>INTELIGENCIA : {inteligencia}</h4>
        <button onClick={aumentarBtn(setInteligencia, inteligencia)}>+1</button>
        </div>
        <button onClick={resetar (setInteligencia, 1 )}>resetar</button>
        </div>
        </div>


        
          
     

        </>
  )
}

export default App
