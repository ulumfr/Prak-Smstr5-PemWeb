import React from 'react'
import { NavLink } from "react-router-dom";
import { Navbar as Navbar, Container, Image, Nav, Button} from 'react-bootstrap';
import Ilablogo from '../assets/img/logo-ilab.png';

const NavBar = () => {
  return (
    <Navbar expand="lg" bg="light" fixed="top">
        <Container fluid className="mx-4">
            <Navbar.Brand href="https://infotech.umm.ac.id/">
                <Image src={ Ilablogo } alt="logo-ilab" draggable="false" />
            </Navbar.Brand>
            <Navbar.Toggle type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" />
            <Navbar.Collapse id="navbarSupportedContent">
                <Nav className="mx-auto">
                    <Nav.Item>
                        <Nav.Link as={ NavLink } to="/" className="fw-medium" activeClassName="active">HOME</Nav.Link>
                    </Nav.Item>

                    <Nav.Item>
                        <Nav.Link as={ NavLink } to="/about" className="fw-medium" activeClassName="active">ABOUT US</Nav.Link>
                    </Nav.Item> 

                    <Nav.Item>
                        <Nav.Link as={ NavLink } to="/contact" className="fw-medium" activeClassName="active">CONTACT</Nav.Link>
                    </Nav.Item>
                </Nav>
                <Nav className="gap-2">
                    <Button variant="outline-dark" className="border-dark border-2 fs-6 fw-medium custom-signup">SIGN UP</Button>
                    <Button className="fs-6 text-light border-0 custom-login">LOG IN</Button>
                </Nav>
            </Navbar.Collapse>
        </Container>
    </Navbar>
  )
}

export default NavBar
