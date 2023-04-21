@extends('layout')

@section('head')
<title>Immobilienbewertung Duisburg</title>
<meta name="Description" content="Sachverständiger Immobilienbewertung Duisburg ▶ Kostenlose Beratung ✔ TÜV zertifizierte Gutachter ✔ Festpreise  ✔ Kurzfristige Termine ✔ Verkehrswertgutachten ✔">
@endsection

@section('content')

<main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="/img/allegra.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Immobilienbewertung<br><b>{{$domainort}}</b></h1>
                       

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                   
                </div>
            </section>

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Wertermittlungen für folgende Immobilienarten</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
<a href="#wohnimmobilien">
                        <img src="/img/wohnimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                          

                            <div class="place__data">
                                <h3 class="place__title">Wohn-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card"><a href="#gewerbeimmobilien">
                        <img src="/img/gewerbeimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Gewerbe-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
<a href="#sonderimmobilien">
                        <img src="/img/sonderimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                           

                            <div class="place__data">
                                <h3 class="place__title">Sonder-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
<a href="#grundstuecke-und-rechte">
                        <img src="/img/grundstueck.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Grundstücke & Rechte</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                     <div class="place__card">
<a href="#landwirtschaftliche-immobilien">

                        <img src="/img/landwirtschaft.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Landwirt-<br>schaftliche Immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

            </section> 
<!--==================== Wohnimmobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
    <section class="container" id="wohnimmobilien" style="display: flex; flex-direction: row; align-items: center;">
        
        <div style="flex: 1;">
            <h3>Wohnimmobilien</h3>
            <p>Bei der Bewertung von Wohnimmobilien spielen auch die verschiedenen Typen von Immobilien eine wichtige Rolle. Jeder Typ von Wohnimmobilie hat unterschiedliche Merkmale und Eigenschaften, die bei der Bewertung berücksichtigt werden müssen.

So wird beispielsweise bei der Bewertung von Einfamilienhäusern oft das Sachwertverfahren angewendet, da hierbei die Kosten für die Herstellung oder Wiederherstellung der Immobilie berücksichtigt werden. Bei Eigentumswohnungen hingegen wird oft das Ertragswertverfahren angewendet, da hierbei die erwarteten Erträge aus Vermietung oder Verpachtung eine wichtige Rolle spielen.

Auch die Lage und der Zustand der Immobilie können bei der Bewertung eine große Rolle spielen. So kann beispielsweise ein Ferienhaus in einer begehrten Lage einen höheren Wert haben als ein vergleichbares Ferienhaus in einer weniger beliebten Lage. Der Zustand der Immobilie kann ebenfalls den Wert beeinflussen, da eine gut gepflegte Immobilie oft einen höheren Wert hat als eine vernachlässigte Immobilie.

Bei der Bewertung von Pflegeappartments können zudem weitere Faktoren wie die Ausstattung und die Serviceleistungen der Pflegeeinrichtung eine Rolle spielen. Hierbei kann beispielsweise der Zustand der Gemeinschaftsräume oder die Verfügbarkeit von Pflegepersonal den Wert der Immobilie beeinflussen.

Insgesamt ist bei der Bewertung von Wohnimmobilien immer eine individuelle Herangehensweise notwendig, die die Besonderheiten und Eigenschaften der jeweiligen Immobilie berücksichtigt.</p>
        </div>
        <img src="/img/wohnimmobilien.jpg" alt="Bildbeschreibung hier" style="flex: 1; margin-left: 20px;  width:50%;">
    </section>
</div>

<!--==================== Gewerbeimmobilien ====================-->
<div style="padding:3%;">
    <section class="container" id="gewerbeimmobilien" style="display: flex; flex-direction: row; align-items: center;">
        <img src="/img/gewerbeimmobilien.jpg" alt="Bildbeschreibung hier" style="flex: 1; margin-right: 20px; width:50%;">
        <div style="flex: 2;">
            <h3>Gewerbeimmobilien</h3>
            <p>Die Bewertung von Gewerbeimmobilien ist ein wichtiger Prozess, der für verschiedene Zwecke, wie beispielsweise den Verkauf oder die Vermietung der Immobilie, durchgeführt wird. Dabei werden eine Vielzahl von Faktoren berücksichtigt, wie zum Beispiel die Größe und der Standort der Immobilie, die Art des Geschäfts, das in der Immobilie betrieben wird, sowie die aktuelle Marktlage auf dem Gewerbeimmobilienmarkt.

Ein zentraler Aspekt bei der Bewertung von Gewerbeimmobilien ist der Standort. Denn der Standort hat einen erheblichen Einfluss auf den Wert der Immobilie. So ist beispielsweise eine Gewerbeimmobilie in bester Lage mehr wert als eine Immobilie in einem weniger begehrten Gebiet. Auch die Art des in der Immobilie betriebenen Unternehmens kann sich auf den Wert auswirken. Eine Gewerbeimmobilie, die an ein hochwertiges Einzelhandelsunternehmen vermietet ist, wird in der Regel mehr wert sein als eine Immobilie, die an einen Discounter vermietet ist.

Darüber hinaus können wirtschaftliche Bedingungen und die aktuelle Marktlage auf dem Gewerbeimmobilienmarkt den Wert einer Gewerbeimmobilie erheblich beeinflussen. So kann es beispielsweise in Zeiten von wirtschaftlicher Stagnation zu einem Rückgang der Nachfrage nach Gewerbeimmobilien kommen, was sich auf den Wert auswirkt.

Insgesamt ist die Bewertung von Gewerbeimmobilien ein wichtiger Schritt, um den Wert einer Immobilie zu ermitteln und eine Entscheidungshilfe für potenzielle Investoren oder Mieter zu bieten. Dabei müssen viele verschiedene Faktoren berücksichtigt werden, um eine möglichst genaue Einschätzung des Immobilienwerts zu erzielen.</p>

        </div>
    </section>
</div>

<!--==================== Sonderimmobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
<section class="container" id="sonderimmobilien">
    <h3>Sonderimmobilien</h3>
    <p>Sonderimmobilien sind Immobilien, die sich nicht eindeutig in eine bestimmte Kategorie einordnen lassen. Sie können zum Beispiel historische Gebäude, Denkmäler, Kirchen oder andere spezielle Immobilien sein. Die Bewertung solcher Immobilien erfordert daher eine spezielle Herangehensweise, die auf den individuellen Merkmalen der jeweiligen Immobilie basiert.

Bei der Bewertung von Sonderimmobilien müssen die Gutachter ihr Fachwissen und ihre Erfahrung nutzen, um den für die jeweilige Immobilie am besten geeigneten Ansatz zu ermitteln. Dazu gehört zum Beispiel die Berücksichtigung von Faktoren wie der historischen Bedeutung, dem Erhaltungszustand und der Seltenheit der Immobilie.

Auch besondere Herausforderungen, die mit diesen Arten von Immobilien verbunden sind, müssen bei der Bewertung berücksichtigt werden. So können zum Beispiel Beschränkungen durch den Denkmalschutz oder bestimmte Vorschriften bei der Renovierung und Modernisierung der Immobilie den Wert beeinflussen.

Insgesamt erfordert die Bewertung von Sonderimmobilien ein hohes Maß an Fachwissen und Erfahrung. Um eine genaue Einschätzung des Werts zu erzielen, müssen alle speziellen Merkmale und Herausforderungen berücksichtigt werden.</p>
</section>
</div>
<!--==================== Grundtsücke und Rechte ====================-->
<div style=" padding:3%;">
<section class="container" id="grundstuecke-und-rechte">
    <h3>Grundstücke und Rechte</h3>
    <p>Immobilien sind ein wichtiger Bestandteil der Wirtschaft und spielen eine entscheidende Rolle in unserem täglichen Leben. Ob als Wohnraum oder als Gewerbeimmobilien – sie dienen als Orte des Zusammenlebens und der Geschäftstätigkeit. Doch Immobilien sind nicht nur Gebäude, sondern auch Grundstücke und die damit verbundenen Rechte und Verpflichtungen. In diesem Kontext gibt es verschiedene Begriffe und Konzepte, die für potenzielle Käufer, Mieter oder Investoren von Bedeutung sind.</p>
</section>
</div>
<!--==================== Landwirtschaftliche Immobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
<section class="container" id="landwirtschaftliche-immobilien">
    <h3>Landwirtschaftliche Immobilien</h3>
    <p>Landwirtschaftliche Immobilien, wie Bauernhöfe oder landwirtschaftliche Flächen, spielen eine wichtige Rolle in der Landwirtschaft und in der Produktion von Nahrungsmitteln. Sie bestehen aus einer Kombination von Wohn- und Nutzflächen wie Viehhaltung, Lagerung und Acker-, Wiesen- und Weideflächen. Für die Bewertung von landwirtschaftlichen Betrieben werden spezielle Ansprüche gestellt, da sowohl die Qualität des Bodens als auch die Größe und Lage der Betriebs- und Wohngebäude einen großen Einfluss auf den Wert der Immobilie haben. In diesem Kontext sind auch die verschiedenen Kategorien landwirtschaftlicher Flächen von Bedeutung, die in Deutschland in unterschiedliche Arten wie Ackerland, Grünland oder Obstbaumanlagen unterteilt werden. Im Folgenden werden wir uns genauer mit diesen Themen auseinandersetzen und ihre Bedeutung für den Immobilienmarkt beleuchten.</p>
</section>
</div>



<!--==================== Icons Partner ====================-->
            <section class="experience section">
                <h2 class="section__title">Allegra Immobilienbewertung <br> Der Partner für Ihre Immobilien</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                                <img src="/img/location.svg" alt="Regionale Expertise" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Regionale <br/>Expertise</span>
                        </div>

                        <div class="experience__data">
                        <img src="/img/certification.svg" alt="Zertifiziert" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Zertifiziert</span>
                        </div>
                        
                        <div class="experience__data">
                        <img src="/img/lock.svg" alt="Unabhängige Gutachter" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Unabhängige <br/>Gutachter</span>
                        </div>
                    </div>
</section>

@endsection