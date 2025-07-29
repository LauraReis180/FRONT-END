
import './Header.css'
import Logo from'./../../assets/react.svg'

function Header() {
  
  return (
    <>
    <header className='w-full p-3 bg-sky-50 flex justify-between'>
       {/* header esquerda */}
      <div className='logo'>
       <img src={Logo} />
       {/* header direita */}
      </div>

      <div className='links'>
      
      <nav>
        <ul className='flex gap-3'>
         <li><a className="text-red-300" href="HOME">a</a></li> 
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
