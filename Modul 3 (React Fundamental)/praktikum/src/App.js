import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import HomePage from './pages/home';
import AboutPage from './pages/about';
import ContactPage from './pages/contact';
import NavBar from './components/navbar';
import Footer from './components/footer';

function App() {
    return (
        <Router>
            <NavBar />
            <Routes>
                <Route path="/" element={<HomePage />} />
                <Route path="/about" element={<AboutPage />} />
                <Route path="/contact" element={<ContactPage />} />
            </Routes>
            <Footer />
        </Router>
    );
}
  
export default App;