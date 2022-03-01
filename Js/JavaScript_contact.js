const body = document.body
            const references = [
            {
                first: 'Joseph',
                last: 'Cottis',
                relation: 'Grandfather / Client',
                contact: 'jfcottis@bracefit.com'
            },
            {
                first: 'Shaunly',
                last: 'Cottis',
                relation: 'Mother',
                contact: 'shaunly@nationalDME.net'
            },
            {
                    
                first: 'Scott',
                last: 'Cottis',
                relation: 'Father',
                contact: 'scott@bracefit.com'
            },
            {
                first: 'Cameron',
                last: 'Horne',
                relation: 'Friend',
                contact: 'seahorne2112@gmail.com'
            },
            ];

            
            let tbReferences = document.getElementById('tbReferences');
            references.forEach((reference, index) => {
                let referenceHTML = document.createElement('tr')
                let number = document.createElement('td')
                let first = document.createElement('td')
                let last = document.createElement('td')
                let relation = document.createElement('td')
                let contact = document.createElement('td')

                number.innerHTML = index + 1
                first.innerHTML = reference.first
                last.innerHTML = reference.last
                relation.innerHTML = reference.relation
                contact.innerHTML = reference.contact
                
                referenceHTML.append(number)
                referenceHTML.append(first)
                referenceHTML.append(last)
                referenceHTML.append(relation)
                referenceHTML.append(contact)
                tbReferences.append(referenceHTML)
            })
