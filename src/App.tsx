import React from 'react';
import { Menu, Home, Mail, Settings } from 'lucide-react';

function App() {
  return (
    <div>
      {/* Navigation */}
      <nav className="uk-navbar-container" data-uk-navbar="">
        <div className="uk-navbar-left">
          <ul className="uk-navbar-nav">
            <li className="uk-active">
              <a href="#"><Home className="uk-margin-small-right" /> Home</a>
            </li>
            <li>
              <a href="#"><Mail className="uk-margin-small-right" /> Contact</a>
            </li>
            <li>
              <a href="#"><Settings className="uk-margin-small-right" /> Settings</a>
            </li>
          </ul>
        </div>
        <div className="uk-navbar-right">
          <a className="uk-navbar-toggle" href="#" data-uk-toggle="target: #offcanvas-nav">
            <Menu />
          </a>
        </div>
      </nav>

      {/* Slider */}
      <div className="uk-position-relative uk-visible-toggle uk-light" data-uk-slider="center: true">
        <ul className="uk-slider-items uk-grid uk-grid-match" data-uk-height-viewport="offset-top: true; offset-bottom: 30">
          <li className="uk-width-3-4">
            <div className="uk-cover-container">
              <img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e" alt="" data-uk-cover />
              <div className="uk-position-center uk-panel"><h1>Nature</h1></div>
            </div>
          </li>
          <li className="uk-width-3-4">
            <div className="uk-cover-container">
              <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2" alt="" data-uk-cover />
              <div className="uk-position-center uk-panel"><h1>Architecture</h1></div>
            </div>
          </li>
          <li className="uk-width-3-4">
            <div className="uk-cover-container">
              <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" alt="" data-uk-cover />
              <div className="uk-position-center uk-panel"><h1>Technology</h1></div>
            </div>
          </li>
        </ul>
        <a className="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
        <a className="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
      </div>

      {/* Slideshow */}
      <div className="uk-position-relative uk-visible-toggle uk-light" data-uk-slideshow="animation: push; autoplay: true">
        <ul className="uk-slideshow-items">
          <li>
            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e" alt="" data-uk-cover />
            <div className="uk-position-center uk-position-small uk-text-center uk-light">
              <h2 className="uk-margin-remove">Beautiful Landscapes</h2>
              <p className="uk-margin-remove">Discover nature's beauty</p>
            </div>
          </li>
          <li>
            <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000" alt="" data-uk-cover />
            <div className="uk-position-center uk-position-small uk-text-center uk-light">
              <h2 className="uk-margin-remove">Urban Life</h2>
              <p className="uk-margin-remove">Experience city vibes</p>
            </div>
          </li>
          <li>
            <img src="https://images.unsplash.com/photo-1505118380757-91f5f5632de0" alt="" data-uk-cover />
            <div className="uk-position-center uk-position-small uk-text-center uk-light">
              <h2 className="uk-margin-remove">Ocean Views</h2>
              <p className="uk-margin-remove">Feel the ocean breeze</p>
            </div>
          </li>
        </ul>
        <a className="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
        <a className="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
        <div className="uk-position-bottom-center uk-position-small">
          <ul className="uk-dotnav">
            <li data-uk-slideshow-item="0"><a href="#">Item 1</a></li>
            <li data-uk-slideshow-item="1"><a href="#">Item 2</a></li>
            <li data-uk-slideshow-item="2"><a href="#">Item 3</a></li>
          </ul>
        </div>
      </div>

      {/* Hero Section */}
      <div className="uk-section uk-section-primary uk-light uk-padding-large">
        <div className="uk-container uk-text-center">
          <h1 className="uk-heading-medium">Welcome to UIkit React</h1>
          <p className="uk-text-lead">A beautiful and modern website built with UIkit and React</p>
          <button className="uk-button uk-button-default uk-margin-right">Learn More</button>
          <button className="uk-button uk-button-secondary">Get Started</button>
        </div>
      </div>

      {/* Gallery */}
      <div className="uk-section">
        <div className="uk-container">
          <h2 className="uk-heading-line uk-text-center"><span>Photo Gallery</span></h2>
          <div className="uk-child-width-1-3@m" data-uk-grid data-uk-lightbox="animation: slide">
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1561214115-f2f134cc4912" data-caption="Art & Culture">
                <img src="https://images.unsplash.com/photo-1561214115-f2f134cc4912?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Art & Culture</span>
                </div>
              </a>
            </div>
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1488646953014-85cb44e25828" data-caption="Travel">
                <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Travel</span>
                </div>
              </a>
            </div>
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" data-caption="Food">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Food</span>
                </div>
              </a>
            </div>
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1441974231531-c6227db76b6e" data-caption="Nature">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Nature</span>
                </div>
              </a>
            </div>
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1487958449943-2429e8be8625" data-caption="Architecture">
                <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Architecture</span>
                </div>
              </a>
            </div>
            <div>
              <a className="uk-inline" href="https://images.unsplash.com/photo-1518770660439-4636190af475" data-caption="Technology">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=300&fit=crop" alt="" />
                <div className="uk-position-center uk-overlay uk-overlay-primary">
                  <span>Technology</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      {/* Features Grid */}
      <div className="uk-section">
        <div className="uk-container">
          <h2 className="uk-heading-line uk-text-center"><span>Our Features</span></h2>
          <div className="uk-child-width-1-3@m uk-grid-match" data-uk-grid="">
            <div>
              <div className="uk-card uk-card-default uk-card-body uk-text-center">
                <Home className="uk-margin-bottom" size={40} />
                <h3 className="uk-card-title">Modern Design</h3>
                <p>Clean and modern interface built with UIkit components.</p>
              </div>
            </div>
            <div>
              <div className="uk-card uk-card-default uk-card-body uk-text-center">
                <Settings className="uk-margin-bottom" size={40} />
                <h3 className="uk-card-title">Customizable</h3>
                <p>Easily customize and extend with UIkit's flexible framework.</p>
              </div>
            </div>
            <div>
              <div className="uk-card uk-card-default uk-card-body uk-text-center">
                <Mail className="uk-margin-bottom" size={40} />
                <h3 className="uk-card-title">Responsive</h3>
                <p>Fully responsive design that works on all devices.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Off-canvas Navigation */}
      <div id="offcanvas-nav" data-uk-offcanvas="overlay: true">
        <div className="uk-offcanvas-bar">
          <button className="uk-offcanvas-close" type="button" data-uk-close=""></button>
          <h3>Navigation</h3>
          <ul className="uk-nav uk-nav-default">
            <li className="uk-active"><a href="#"><Home className="uk-margin-small-right" /> Home</a></li>
            <li><a href="#"><Mail className="uk-margin-small-right" /> Contact</a></li>
            <li><a href="#"><Settings className="uk-margin-small-right" /> Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
  );
}

export default App;