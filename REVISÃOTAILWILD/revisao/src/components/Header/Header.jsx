import './Header.css'
import Logo from'./revisao/src/airplane-engines.svg'

function Header() {
  
  return (
    <>
    <header className='w-full p-3 bg-sky-400 flex justify-center'>
       {/* header esquerda */}
      <div className='logo'>
       <img src={Logo} />
      </div>
      {/* header direita */}
      <div>
      <nav>
        <ul className='flexgap-3'>
         <li><a href="HOME"></a></li> 
         <li><a href="CATALOGO"></a></li> 
         <li><a href="SOBRE"></a></li> 
        </ul> 
      </nav>
      </div>
    </header>
    </>
  )
}

export default Header;
