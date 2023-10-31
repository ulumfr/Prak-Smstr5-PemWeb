import React from 'react'
import { Container, Row, Col, Image } from 'react-bootstrap';
import IlabLogo from '../assets/img/logo-ilab.png';
import FacebookLogo from '../assets/img/logo-facebook.png';
import TwitterLogo from '../assets/img/logo-twitter.png';
import InstagramLogo from '../assets/img/logo-instagram.png';

const Footer = () => {
    return (
        <footer className="text-center text-lg-start bg-light text-muted">
            <Container className="p-3">
                <div className="text-center text-md-start mt-5">
                    <Row>
                        <Col md="3" className="mb-4 mx-auto d-flex flex-column justify-content-center align-items-center">
                            <Image src={ IlabLogo } className="custom-img-footer" alt="logo-ilab" draggable="false" />
                            <p className="py-4 opacity-50">Copyright &copy; 2022. Infinite Learning</p>
                        </Col>

                        <Col md="6" lg="2" xl="2" className="mx-auto mb-4">
                            <h6 className="fs-5 fw-medium mb-4 opacity-25">Services</h6>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Email Marketing</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Campaigns</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Branding</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Offline</a>
                            </p>
                        </Col>

                        <Col md="3" lg="2" xl="2" className='mx-auto mb-4'>
                            <h6 className="fs-5 fw-medium mb-4 opacity-25">About</h6>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Our Story</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Benefits</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Team</a>
                            </p>
                            <p>
                                <a href="#" className="text-reset text-decoration-none fw-medium">Careers</a>
                            </p>
                        </Col>

                        <Col md="4" lg="3" xl="3" className="mx-auto mb-md-0 mb-4">
                            <h6 className="fs-5 fw-medium mb-4 opacity-25">Follow Us</h6>
                            <p>
                                <Image style={{ width: '15px' }} src={ FacebookLogo } alt="logo-facebook" draggable="false" />
                                <a className="text-reset text-decoration-none fw-medium mx-4" href="https://www.facebook.com/labit.umm/">Facebook</a>
                            </p>
                            <p>
                                <Image className="custom-logo-footer" src={ TwitterLogo } alt="logo-twitter" draggable="false" />
                                <a className="text-reset text-decoration-none fw-medium mx-3" href="https://twitter.com/labit_umm">Twitter</a>
                            </p>
                            <p>
                                <Image className="custom-logo-footer" src={ InstagramLogo } alt="logo-instagram" draggable="false" />
                                <a className="text-reset text-decoration-none fw-medium mx-3" href="https://www.instagram.com/labit.umm/">Instagram</a>
                            </p>
                        </Col>
                    </Row>
                </div>  
            </Container>
        </footer>
    )
}

export default Footer
