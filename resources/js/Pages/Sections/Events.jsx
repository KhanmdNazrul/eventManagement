import React from 'react'

export default function Events() {
  return (
    <>
    
    <section className="events-three">
                    <div className="container">
                        <div className="section-title text-center">
                            <div className="section-title__tagline-box">
                                <p className="section-title__tagline"><span>//</span> Upcoming Events <span>//</span> </p>
                            </div>
                            <h2 className="section-title__title"> Popular Events <br /> <span>Schedule</span></h2>
                        </div>
                        <div className="events-three__main-tab-box tabs-box">
                            <div className="tabs-content">
                                {/*tab*/}
                                <div className="tab active-tab">
                                    <div className="events-three__main-content-box">
                                        <ul className="list-unstyled events-three__content-list">
                                            {/* loop */}
                                            <li className="events-three__content-single">
                                                <div className="events-three__content-left">
                                                    <div className="events-three__content-img">
                                                        <img src="" alt />
                                                        <div className="events-three__video-link">
                                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" className="video-popup">
                                                                <div className="events-three__video-icon">
                                                                    <span className="icon-play" />
                                                                    <i className="ripple" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div className="events-three__content-user">
                                                        <div className="events-three__content-user-img">
                                                            <img src="" alt />
                                                        </div>
                                                        <div className="events-three__content-user-info">
                                                            <h4 className="events-three__content-user-name"> speaker name </h4>
                                                            <p className="events-three__content-user-sub-title">speaker profession</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="events-three__content-right">
                                                    <div className="events-three__content-right-content">
                                                        <div className="events-three__content-right-content-left">
                                                            <h4 className="events-three__content-right-content-title"><a href="#">event title</a></h4>
                                                            <ul className="list-unstyled events-three__content-right-content-list">
                                                                <li>
                                                                    <div className="icon">
                                                                        <span className="icon-coffee-cup" />
                                                                    </div>
                                                                    <div className="text">
                                                                        <p>Coffee &amp; Snacks</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div className="icon">
                                                                        <span className="icon-youtube" />
                                                                    </div>
                                                                    <div className="text">
                                                                        <p>Video Streaming</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div className="events-three__content-right-content-right">
                                                            <h4 className="events-three__content-right-content-title-two">event start date
                                                            </h4>
                                                            <div className="events-three__content-right-content-time">
                                                                <div className="icon">
                                                                    <span className="icon-time" />
                                                                </div>
                                                                <div className="text">
                                                                    <p>event start_time</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div className="events-three__btn-box">
                                                        <a href="#" className="about-three__btn thm-btn-two"><span className="fas fa-arrow-circle-right" />Buy Ticket</a>
                                                    </div>
                                                </div>
                                            </li>
                                            {/* loop end */}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
    
    
    </>
  )
}
