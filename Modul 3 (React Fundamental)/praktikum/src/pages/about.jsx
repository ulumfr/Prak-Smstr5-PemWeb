import React from 'react';
import { Container, Row, Col, Image, Button } from 'react-bootstrap';
import LogoLabit from '../assets/img/logo-labit.png';

const AboutPage = () => {
    return (
        <section className="pt-5 vh-50">
            <Container className="py-5">
                <Row className="py-5">
                    <Col md="6" className="text-center">
                        <div className="custom-about">
                            <Image src={ LogoLabit } alt="logo-labit" className="custom-logo-labit" draggable="false" />
                        </div>
                    </Col>

                    <Col md="6" className="ps-5">
                        <h3>About Us</h3>
                        <div className="py-3 opacity-50">
                            <p className="text-justify">i-Lab is an integrated system that can support practicum activities in the Department of Informatics at the University of Muhammadiyah Malang, both for practitioners, lecturers and assistants.</p>
                            <p className="my-2 text-justify">i-Lab is the work of students of the University of Muhammadiyah Malang and has been around since 2012 and has gone through many changes since then</p>
                            <Button className="mt-4" href="https://infotech.umm.ac.id/">Learn More</Button>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    );
    
}

export default AboutPage
