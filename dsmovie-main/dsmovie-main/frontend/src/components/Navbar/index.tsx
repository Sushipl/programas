import{ReactComponent as GHIcon} from 'assets/img/Vector.svg';
import './style.css';

function Navbar(){
    return (   
       <header>
        <nav className="container">
          <div className="dsmovie-nav-content">
            <h1>DSMovie</h1>
            <a href="https://github.com/devsuperior" target="_blank" rel="noreferrer">
              <div className="dsmovie-contact-conteiner">
                <GHIcon />
                <p className="dsmovie-contact-link">/devsuperior</p>
              </div>
            </a>
          </div>
        </nav>
      </header>
      );
}

export default Navbar;